<head>
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</head>

<div class="newpost_container">
    <div class="newpost_sub">
        <p>New Post</p>
        <div class="newpost_form">

            <form action="newpost.php" method="post">
                <div class="inside_np">
                    <input type="text" name="post_title" placeholder="Post Title" autofocus required>
                </div>
                <div class="inside_npx">
                    <textarea name="post_description" id="content" cols="30" rows="10"></textarea>
                    <script type="text/javascript">CKEDITOR.replace('content');</script>

                </div>
                <div class="inside_np">
                    <input type="text" name="post_tag" placeholder="Post Tag" required>
                </div>
                <button type="submit" class="" name="submit" >Publish</button>
            </form>

        </div>
    </div>
</div>