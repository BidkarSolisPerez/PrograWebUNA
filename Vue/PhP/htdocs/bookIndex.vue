<template>
  <!-- bookIndex.vue -->
  <div class="row">
    <div style="margin-top: 10%">
      <h3>{{title}}</h3>
      <table>
        <thead>
          <tr>
            <th>Title</th><th>Author</th><th>Publisher</th><th>Ed.</th><th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="book in books">
            <td>{{book.title}}</td>
            <td>{{book.author}}</td>
            <td>{{book.publisher}}</td>
            <td>{{book.edition}}</td>
            <td>
              <router-link class="button button-icon" 
                          :to="'/book/'+book.id">
                <img src="/icons/font-eye.png" style="width:15px"></img>
              </router-link>
              <router-link class="button button-icon" 
                          :to="'/book/'+book.id+'/update'">
                <img src="/icons/font-edit.png" style="width:15px"></img>
              </router-link>
              <router-link class="button button-icon" 
                          :to="'/book/'+book.id+'/delete'">
                <img src="/icons/font-trash.png" style="width:15px"></img>
              </router-link>
            </td>
          </tr>
        </tbody>
      </table>
      <router-link class="button button-primary" to="/book/create"> New </router-link>
    </div>
  </div>
</template>

<script>
module.exports = {
  props: ['books'],
  data: function() {
    return {
      title: "Books List"
    }
  }
}
</script>