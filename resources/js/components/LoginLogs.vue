<template>
    <div class="container">
        <!-- login form -->
        <div class="row mt-4">
            <div class="col-6 offset-3" >
                <div class="col-6 offset-3" v-if="!login_logs.length">
                <form action="#" @submit.prevent="handleLoginform">
                    <h1>Login</h1>
                    <div class="form-row">
                        <input type="email" name="email" class="form-control" v-model="form_data.email" placeholder="Email Address">
                    </div>
                    <div class="form-row">
                        <input type="password" name="password" class="form-control" v-model="form_data.password" placeholder="Password">
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary">Login </button>
                    </div>
                </form>
                </div>
                <div class="row mt-4" v-if="login_logs.length">
                <div class="col-sm-6 offset-3 text-center">
                <h2>User Records</h2>
                </div>
                <div class="" v-for="(log,index) in login_logs" :key="index">
                    
                    <em v-text="log.created_at"></em><br>
                    <b v-text="log.secret"></b>
                </div>
            </div>
            </div>
            
        </div>
    </div>
</template>

<script>
    export default {
      data(){
          return{
              login_logs: [],
              form_data: {
                  email: '',
                  password: ''
              }
          }
      },
      methods: {
          handleLoginform(){
              axios.get('/sanctum/csrf-cookie').then(response => {
                  axios.post('/login',this.form_data).then(response=>{
                      this.getLogin();
                     //console.log();
                  });
            });
          },
          getLogin(){
              axios.get('api/secrets').then(response=>{
                  console.log(response);
                  this.login_logs = response.data;
              })
          }
      }
    }
</script>
<style scoped>
 .form-row{
     margin-bottom: 7px;
 }
</style>
