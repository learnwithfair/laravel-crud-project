{{-- For aler automatically remove --}}
{{-- Should be used jquery code link from http://releases.jquery.com' then work setTimeOut --}}
<script type="text/javascript">
    $('document').ready(function(){
        setTimeout(function() {
            $('div.alert').remove();
        }, 2000);
    });
    </script>