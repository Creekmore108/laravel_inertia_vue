<template>
    <div>
        Hey {{ name }}!
    </div>
    <a :href="route('second')"> go to second link</a>
</template>

<script>
export default {
    props: {
        name: String,
    },
    data() {
        return {};
    }
};
</script>