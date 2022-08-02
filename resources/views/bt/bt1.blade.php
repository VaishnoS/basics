@php $demo=1; @endphp
<!-- unless checks if our expression return false then shows the following data. if the expression returns TRUE it will ignore the inner part -->
@unless($demo==2)
<h1>Vishal</h1>
@endunless
@php $message="Hungry"; @endphp
@isset($message)
{{ $message }}
@endisset