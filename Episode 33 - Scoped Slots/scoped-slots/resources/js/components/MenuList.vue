<template>
  <div>
    <ul>
      <li v-for="item in items" v-bind:key="item">
        <slot name="menu-item" :item="item">{{item}}</slot>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ["items"]
};
</script>