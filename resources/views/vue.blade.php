@extends('layout')

@section('content')

<div id="app" class="container">

        <button type="submit" class="btn btn-primary" @click="count +=1" >Add{{count}}</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    new Vue({
        el: '#app',
        data :{
            count : 0

        },
        methods :{
            updateCounter : function () {
                this.count +=1;
            }

        }
    });
</script>

@stop