@extends('layout.masterlayout')

@section('content')
    <h2>About Page</h2>
    <p>This is the about page.</p>

    @verbatim
        
<div id="app">{{ message }}</div>

    @endverbatim

@endsection


@section('title')
About 
@endsection

@push('scripts')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello World')
      return {
        message
      }
    }
  }).mount('#app')
</script>
@endpush