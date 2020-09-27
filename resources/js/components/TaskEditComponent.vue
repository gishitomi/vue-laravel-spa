<template>
  <div class="container-fluid container">
    <form>
      <div class="form-group row">
        <label for="id" class="col-sm-3 col-form-label"> ID </label>
        <div class="col-sm-9">
          <input type="text" class="form-control-plaintext" id="id" readonly v-bind:value="taskId" />
        </div>
      </div>
      <div class="form-group row">
        <label for="title" class="col-sm-3 col-form-label"> Title </label>
        <div class="col-sm-9">
          <input
            type="text"
            class="form-control"
            id="title"
            placeholder="タイトルを入力"
          />
        </div>
      </div>
      <div class="form-group row">
        <label for="content" class="col-sm-3 col-form-label"> Content </label>
        <div class="col-sm-9">
          <input
            type="text"
            class="form-control"
            id="content"
            placeholder="内容を入力"
          />
        </div>
      </div>
      <div class="form-group row">
        <label for="person" class="col-sm-3 col-form-label"> Person </label>
        <div class="col-sm-9">
          <input
            type="text"
            class="form-control"
            id="person"
            placeholder="お名前"
          />
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
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
        taskId: String
    }
};
</script>