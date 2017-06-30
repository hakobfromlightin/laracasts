@extends('layouts.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/css/lessons.css') }}">
@stop

@section('content')
    <div class="container">
        <lessons :list="my_lessons"></lessons>
    </div>

    <template id="lessons-template">
        <div>
            <h1>My Lessons</h1>

            <ul class="list-group" v-for="lesson in list">
                <li class="list-group-item">
                    @{{ lesson.name }}
                </li>
            </ul>
        </div>
    </template>
@stop

@section('scripts')
    <script>

        Vue.component('lessons', {
            template: '#lessons-template',
        });

        var data = {
            my_lessons: JSON.parse('{!! json_encode($lessons) !!}')
        };

        var vm = new Vue({
            el: '#app',
            data: data
        });
    </script>
@stop
