<template>
  <!-- bookIndex.vue -->
  <div class="row">
   <div style="margin-top: 10%">
     <h3>{{title}}</h3>
     <h4>Current page {{pag}} and items per page {{num_results}}</h4>
     <table><thead>
      <tr>
        <th>Title</th>
        <th>Index</th>
        <th>Author</th>
        <th>Publisher</th>
        <th>Ed.</th>
        <th>Actions</th>
      </tr>
      </thead><tbody>
      <tr v-for="(book,index) in books" v-show="(pag - 1) * num_results <= index && pag * num_results > index">
        <td>{{book.title}}</td>
        <td>{{book.id}}</td>
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
      </tr></tbody>
     </table>
     <div style="width:10%;display:inline">
      <router-link class="button button-primary" to="/book/create">New
      </router-link>
     </div>
     <div style="width:90%;display:inline">
        <a class="button button-primary" href="#" aria-label="Previous" v-show="pag != 1" @click.prevent="pag -= 1">
            <span aria-hidden="true">Anterior</span>
        </a>
        <a class="button button-primary" href="#" aria-label="Next" v-show="pag * num_results / books.length < 1" @click.prevent="pag += 1">
            <span aria-hidden="true">Siguiente</span>
        </a>
     </div>
    </div>
  </div>
</template>

<script>
module.exports = {
  props: ['books','pag','num_results'],
  data: function() {
    return {
      title: "Books List"
    }
  }
}
</script>