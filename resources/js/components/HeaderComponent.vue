<template>
  <div class="container-fluid bg-dark">
    <div class="container">
      <nav class="navbar navbar-dark bg-dark header">
        <!-- Navbar content -->
        <p class="navbar-brand my-2 title">Vue Laravel SPA</p>
        <div class="form-inline my-2 my-lg-0">
          <router-link v-bind:to="{name: 'task.list'}">
            <button class="btn btn-outline-primary my-2 my-sm-0 mx-3">
              List
            </button>
          </router-link>
          <router-link v-bind:to="{name: 'task.create'}">
          <button class="btn btn-outline-success mx-3 my-2 my-sm-0">ADD</button>
          </router-link>
        </div>
      </nav>
    </div>
  </div>
</template>

// 他のコンポーネントには適用されない！！
<style scoped>
.header {
  color: white;
}
.title {
  font-weight: 600;
  font-size: 20px;
}
</style>

<script>
export default {};
</script>
