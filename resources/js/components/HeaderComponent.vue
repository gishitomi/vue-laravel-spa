<template>
  <div class="container-fluid bg-dark">
    <div class="container">
      <nav class="navbar navbar-dark bg-dark header">
        <!-- Navbar content -->
        <p class="navbar-brand my-2">Vue Laravel SPA</p>
        <div class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-primary my-2 my-sm-0 mx-3">
                List
            </button>
          <button class="btn btn-outline-success mx-3 my-2 my-sm-0">
            ADD
          </button>
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
</style>

<script>
export default {};
</script>
