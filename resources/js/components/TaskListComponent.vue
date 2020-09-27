<template>
  <div class="container-fluid container">
    <table class="table">
      <tr class="list-group-item-primary">
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Person</th>
        <th scope="col">Show</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
      <tr>
        <th scope="col" class="contents">1</th>
        <th scope="col" class="contents">昼飯食べる</th>
        <th scope="col" class="contents">ラーメン食べるぜ</th>
        <th scope="col" class="contents">shota</th>
        <th scope="col">
          <router-link v-bind:to="{name: 'task.show', params: {taskId: 1}}">
            <button class="btn btn-primary">Show</button>
          </router-link>
        </th>
        <th scope="col">
          <router-link v-bind:to="{name: 'task.edit', params: {taskId: 1}}">
          <button class="btn btn-success">Edit</button>
          </router-link>
        </th>
        <th scope="col">
          <button class="btn btn-danger">Delete</button>
        </th>
      </tr>
      <tr>
        <th scope="col" class="contents">2</th>
        <th scope="col" class="contents">プログラミング</th>
        <th scope="col" class="contents">vue.jsの勉強するぜ</th>
        <th scope="col" class="contents">shota</th>
        <th scope="col">
          <router-link v-bind:to="{name: 'task.show', params: {taskId: 2}}">
          <button class="btn btn-primary">Show</button>
          </router-link>
        </th>
        <th scope="col">
          <router-link v-bind:to="{name: 'task.edit', params: {taskId: 2}}">
          <button class="btn btn-success">Edit</button>
          </router-link>
        </th>
        <th scope="col">
          <button class="btn btn-danger">Delete</button>
        </th>
      </tr>
    </table>
  </div>
</template>

<style scoped>
table {
  margin-top: 20px;
}
.contents {
  padding-top: 20px;
}
</style>

<script>
export default {};
</script>