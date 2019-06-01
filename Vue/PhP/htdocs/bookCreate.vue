<template>
  <div style="margin-top: 10%">
  <!-- bookCreate.vue -->
    <h3>{{Title}}</h3>
    <div class="container">
      <div class="row">
        <div class="six columns">  
          <label for="title">Title</label>  
          <input class="u-full-width" type="text" name="title" v-model="book.title">
        </div>  
        <div class="six columns">  
          <label for="author_id">Author</label>   
          <input class="u-full-width" type="text" name="author" v-model="book.author">
        </div>
      </div>
      <div class="row">
        <div class="six columns">
          <label for="publisher_id">Publisher</label>   
          <input class="u-full-width" type="text" name="publisher" v-model="book.publisher">
        </div>  
        <div class="six columns">  
          <label for="edition">Edition</label>  
          <input class="u-full-width" type="text" name="edition" v-model="book.edition">
        </div>
      </div>
      <div class="row">
        <div class="twelve columns">
          <button v-on:click="addItem"> Create Book</button>
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
  props: ['books'],
  data: 
    function() {
        return {
            Title: "Book Create",
            book: [
            {title:" ",author:" ", publisher:" ",edition:" "}
            ]
        }
    },
    
    methods: {
        addItem() {

          if(this.book['title']=="" || this.book['author']=="" || this.book['publisher']=="" || this.book['edition']==""){
            alert("Please review all values have been added");
          }else{
            //book = {id:this.books.length+1,title:this.book['title'],author:this.book['author'],publisher:this.book['publisher'],edition:this.book['edition']}
            //this.books.push(book);
            /*this.book = {id:"",title:"",author:"",
            publisher:"",edition:""}
            this.$router.push('/');*/
            Vue.http.post('/book', this.book,{headers: {'Content-Type': 'application/json'}}).then((response)=>{console.log(response);});
            this.book =  {title:" ",author:" ", publisher:" ",edition:" "};
            app.fetchBooks();
        }
            
        }
    }
}
</script>