
@php
    $user = "Sanidhy";
    $fr = ["Apple","Banana","Orange","Grapes"];
@endphp

<script>

var data = @json($user);
//var data2 = @json($fr);
// new method in add js

var data2 = {{ Js::from($fr) }}


console.log(data);

data2.forEach(function(entry) 
{
    console.log(entry);    
});



</script>