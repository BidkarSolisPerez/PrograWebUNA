<template>
  <!-- bookDetail.vue -->
  <div style="margin-top: 10%">
    <h3>{{title}}</h3>
    <div class="container">
      <div class="row">
        <div class="six columns">  
          <label for="title">Title</label>  
          <input class="u-full-width" type="text" readonly name="title" v-model="book.title">
        </div>  
        <div class="six columns">  
          <label for="author_id">Author</label>   
          <input class="u-full-width" type="text" readonly name="author" v-model="book.author">
        </div>
      </div>
      <div class="row">
        <div class="six columns">
          <label for="publisher_id">Publisher</label>   
          <input class="u-full-width" type="text" readonly name="publisher" v-model="book.publisher">
        </div>  
        <div class="six columns">  
          <label for="edition">Edition</label>  
          <input class="u-full-width" type="text" readonly name="edition" v-model="book.edition">
        </div>
      </div>
      <div class="row">
        <div class="twelve columns">
          <router-link class="button button-icon" :to="'/'">
            <img src="/icons/back.png" style="width:25px">
          </router-link>
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
        title: "Book Detail"
      }
    },
    methods: {
      addItem() {
      }
    }
  }
</script>