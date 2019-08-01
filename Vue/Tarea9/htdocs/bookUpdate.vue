<template>
  <div style="margin-top: 10%">
  <!-- bookUpdate.vue -->
    <h3>{{title}}</h3>
    <div class="container">
       <div class="row">
         <div class="six columns">  
           <label for="title">Title</label>  
           <input class="u-full-width" type="text"  
                  name="title" v-model="book.title">
         </div>  
         <div class="six columns">  
            <label for="author">Author</label>   
            <input class="u-full-width" type="text"
                   name="author" v-model="book.author">
          </div>
       </div>
       <div class="row">
         <div class="six columns">
           <label for="publisher">Publisher</label>   
           <input class="u-full-width" type="text"  
                  name="publisher" v-model="book.publisher">
         </div>  
         <div class="six columns">  
           <label for="edition">Edition</label>  
           <input class="u-full-width" type="text"  
                  name="edition" v-model="book.edition">
         </div>
       </div>
      </div>
      <button class="button button-primary" v-on:click="updateBook">  
        Update  
      </button>
      <router-link class="button button-icon" :to="'/'">
          <img src="/icons/back.png" style="width:25px">
      </router-link>
    </div>
</template>

<script>
module.exports = {
  props: ['books','book'],
  data: function() {
    return {
      title: "Book Update"
    }
  },
  methods: {
    updateBook() {
      Vue.http.put('/book/'+this.book.id, this.book,
        {headers: {'Content-Type': 'application/json'}}).then((response) => {
        app.fetchBooks();
        router.go(-1);
      });
    }
  }
}
</script> 