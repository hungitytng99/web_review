<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

use Validator;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile() {
        return view('Profile.profile');
    }

    public function editProfile(Request $request) {
        $query_user = User::where('id', Auth::user()->id);
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'date_of_birth' => 'nullable|date',
            'weight' => 'nullable|integer|numeric',
            'height' => 'nullable|integer|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with([
                'tab' => 1
            ]);       
        }

        if ($request->hasFile('upload_avatar')) {
            $image = $request->file('upload_avatar');
            $path = $image->move('assets/avatars');

            if ($user->avatar != 'assets/avatars/default.png') {
                File::delete($user->avatar);
            }

            $query_user->update([
                'avatar' => $path
            ]);

            return redirect('/profile')->with([
                'status-success-0' => "Cập nhật avatar thành công"
            ]);
        }
        

        if (trim($request->input('name')) != null) {
            $query_user->update([
                'name' => trim($request->input('name'))
            ]);

            return redirect('/profile')->with([
                'status-success-1' => 'Cập nhật thông tin thành công'
            ]);
        }

        if ($user) {
            $query_user->update([
                'date_of_birth' => $request->input('date_of_birth') ?? $user->date_of_birth,
                'job' => $request->input('job') ?? $user->job,
                'weight' => $request->input('weight') ?? $user->weight,
                'height' => $request->input('height') ?? $user->height,
            ]);
        }

        if($request->has('old_password') && $request->has('new_password') && $request->has('retype_new_password')) {
            if (Hash::check($request->input('old_password'), Auth::user()->password)) {
                if ($request->input('old_password') != $request->input('new_password')
                 && $request->input('new_password') == $request->input('retype_new_password')) {
                    $query_user->update([
                        'password' => bcrypt($request->input('new_password'))
                    ]);
                } else {
                    return redirect('/profile')->with([
                        'status-error-1' => 'Cập nhật thông tin thất bại'
                    ]);
                }
            } else {
                return redirect('/profile')->with([
                    'status-error-1' => 'Sai mật khẩu hiện tại'
                ]);
            }
        }

        return redirect('/profile')->with([
            'status-success-1' => 'Cập nhật thông tin thành công'
        ]);
    }

    public function deleteAccount(Request $request) {
        if ($request->has('delete_account') && $request->input('delete_account') === 'yes') {
            $user = Auth::user();
            Auth::logout();
            if ($user->delete()) {
                return redirect('/')->with([
                    'global', 'Your account has been deleted!'
                ]);
            }
        }
    }
}
