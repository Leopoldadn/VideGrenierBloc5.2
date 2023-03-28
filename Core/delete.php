<php?

Route::delete('/delete/{id}', function($id) {
    $article = Article::find($id);
    if (Auth::check() && Auth::user()->id == $article->user_id) {
        $article->delete();
        return redirect('/')->with('success', 'L\'article a été supprimé avec succès');
    } else {
        return redirect
    }
}
?>