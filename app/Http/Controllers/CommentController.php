<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'listing_id' => 'required|exists:listings,id',
            'content' => 'required|string',
        ]);

        // Create the comment
        $comment = new Comment();
        $comment->listing_id = $validatedData['listing_id'];
        $comment->user_id = auth()->user()->id;
        $comment->content = $validatedData['content'];
        $comment->save();

        // Redirect back or perform any other actions
        return redirect()->back()->with('success', 'Comment added Successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        // Find the comment owned by the authenticated user
        $comment = Comment::where('id', $id)
                          ->where('user_id', auth()->user()->id)
                          ->first();

        if (!$comment) {
            return redirect()->back()->with('error', 'You are not authorized to edit this comment.');
        }

        $comment->content = $request->input('content');
        $comment->save();

        return redirect()->back()->with('success', 'Comment updated Successfully.');
    }

    public function destroy(Comment $comment)
{
    // Check if the authenticated user owns the comment
    if ($comment->user_id != auth()->user()->id) {
        abort(403, 'Unauthorized Action');
    }

    // Delete the comment
    $comment->delete();

    return back()->with('message', 'Comment Deleted Successfully!');
}





}
