<template>
    <div>
        Hello {{ name }}!

        <p>In this series, we will use the following frameworks:</p>
        <ul>
            <li v-for="framework of frameworks" v-text="framework"></li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        name: String,
        frameworks: Array,
    },
};
</script>