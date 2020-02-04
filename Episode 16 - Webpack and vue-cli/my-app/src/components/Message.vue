<template>
  <div class="box is-info">
    <p>
      <slot></slot>
    </p>
  </div>
</template>

<script>
export default {

    
};
</script>

<style>
.box {
  background: gray;
  padding: 10px;
  border: 1px solid darkgray;
  margin-bottom: 1em;
}
</style>