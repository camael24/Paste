<?php
$this->inherits('hoa://Application/View/Layout/Base.tpl.php');
$this->block('content');
?>
<h1>Quick usage</h1>
		<p><code>hoa core:paste</code> copies from stdin and pastes here. It outputs the URL of your paste. Then, you can do something like:</p>
		<pre><code>$ cat myfile | hoa core:paste | copy</code></pre><p><code>copy</code> is <code>pbcopy</code> on Mac OS X or <code>xsel</code>on X11, i.e. Linux, FreeBSD etc.</p>

		<h1>Tools</h1><p>This is a short function to paste some selected lines in Vim:</p>
		<pre><code>function Paste() range
  echo system(
           \ "echo '". substitute(
               \ join(getline(a:firstline, a:lastline), "\n"),
               \ "'",
               \ "'\"'\"'",
               \ "g"
           \ )."' | hoa core:paste | pbcopy"
       \ )
endfunction
command -range=% -nargs=0 Paste :&lt;line1>,&lt;line2>call Paste()</code></pre>
	<p>Thus, select multiple lines with <kbd>Shift-V</kbd> and then<code>:'<'>Paste</code>, the URL to the fresh paste is in yourpasteboard.</p>
<?php
$this->endBlock();
