
{{-- javascript link  --}}
<script type = "text/javascript" src="{{URL::asset('js/app.js')}}"></script>
<script type = "text/javascript" src="{{URL::asset('js/material-kit.js')}}"></script>
<script type = "text/javascript" src="{{URL::asset('js/emojionearea.min.js')}}"></script>

{{-- CKeditor --}}
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

{{-- Confirmation --}}
<script>
function confirmDelete() {
var result = confirm('Do you want to delete this post?');

if (result) {
        return true;
    } else {
        return false;
    }
}   
</script>


<script type="text/javascript">
  $(document).ready(function() {
    $("#emoji").emojioneArea();
  });
</script>


    </body>
</html>
