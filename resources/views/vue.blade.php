@extends('layout')

@section('content')

<div id="app" class="container">
    <form >
        <div class="form-group">

            <p class="text-danger" v-show="!message">
                you must enter message
            </p>
            <textarea class="form-control" v-model="message"></textarea>
        </div>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    new Vue({
        el: '#app',
        data:{

            message :''
        }

    });
</script>

@stop