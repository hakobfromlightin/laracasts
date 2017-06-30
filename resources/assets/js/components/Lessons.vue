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

<script>
    export default {
        data() {
            return {
                message: "Hello Laracasts Manager!"
            };
        },
        mounted() {
        }
    }
</script>