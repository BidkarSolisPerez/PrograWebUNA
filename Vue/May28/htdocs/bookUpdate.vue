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
            <label for="author_id">Author</label>   
            <input class="u-full-width" type="text"
                   name="author" v-model="book.author">
          </div>
       </div>
       <div class="row">
         <div class="six columns">
           <label for="publisher_id">Publisher</label>   
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
    </div>
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
    addItem() {
    }
  }
}
</script>