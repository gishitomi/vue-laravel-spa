<template>
  <div class="container-fluid container">
    <form>
      <div class="border-bottom form-group row">
        <label for="id" class="col-sm-3">ID</label>
        <input
          type="text"
          class="col-sm-9 form-control-plaintext"
          id="id"
          readonly
          v-bind:value="taskId"
        />
      </div>
      <div class="border-bottom form-group row">
        <label for="title" class="col-sm-3">Title</label>
        <input
          type="text"
          class="col-sm-9 form-control-plaintext"
          id="title"
          readonly
          value="title"
        />
      </div>
      <div class="border-bottom form-group row">
        <label for="content" class="col-sm-3">Content</label>
        <input
          type="text"
          class="col-sm-9 form-control-plaintext"
          id="content"
          readonly
          value="content"
        />
      </div>
      <div class="border-bottom form-group row">
        <label for="person" class="col-sm-3">Person</label>
        <input
          type="text"
          class="col-sm-9 form-control-plaintext"
          id="person"
          readonly
          value="person"
        />
      </div>
    </form>
    <div class="form-group row">
      <div class="col-sm-10">
        <router-link v-bind:to="{ name: 'task.list' }">
          <button class="btn btn-danger">Back</button>
        </router-link>
      </div>
    </div>
  </div>
</template>

<style scoped>
form {
  margin-top: 20px;
}
input[type="text"]:focus {
  outline: 0;
}
</style>

<script>
export default {
  props: {
    taskId: String,
  },
};
</script>