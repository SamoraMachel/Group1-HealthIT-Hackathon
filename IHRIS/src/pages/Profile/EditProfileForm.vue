<template>
<div class="">
  <card>
    <h5 slot="header" class="title">Register Health Worker</h5>
    <div class="row">
      <div class="col-md-4 pr-md-1">
        <base-input label="First Name"
                  placeholder="First Name"
                  v-model="model.firstName"
                  >
        </base-input>
      </div>
      <div class="col-md-4 px-md-1">
        <base-input label="Other Name"
                  placeholder="Other Name"
                  v-model="model.otherName">
        </base-input>
      </div>
      <div class="col-md-4 pl-md-1">
        <base-input label="Last Name"
                  placeholder="Last Name">
        </base-input>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 pr-md-1">
        <base-input label="Gender"
                  v-model="model.gender"
                  placeholder="Gender (Male / Female) ">
        </base-input>
      </div>
      <div class="col-md-6 pl-md-1">
        <base-input label="Date of Birth"
                  v-model="model.DOB"
                  placeholder="Date Of Birth"
                  type="date">
        </base-input>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <base-input label="Home County "
                  v-model="model.county"
                  placeholder="Home County">
        </base-input>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 pr-md-1">
        <base-input label="Phone Number"
                  v-model="model.phoneNumber"
                  placeholder="Phone Number">
        </base-input>
      </div>
      <div class="col-md-4 px-md-1">
        <base-input label="Employer"
                  v-model="model.employer"
                  placeholder="Empoloyer (GoK/MoH) (FBO/NGO)">
        </base-input>
      </div>
      <div class="col-md-4 pl-md-1">
        <base-input label="Terms Of Employment"
                  placeholder="Terms Of Employment">
        </base-input>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 pr-md-1">
        <base-input label="Date of Employment"
                  v-model="model.DOE"
                  placeholder="Date of Employment"
                  type="Date">
        </base-input>
      </div>
      <div class="col-md-6 px-md-1">
        <base-input label="Job Designation"
                  v-model="model.employer"
                  placeholder="Job Designation">
        </base-input>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 pr-md-1">
        <base-input label="Facility Name"
                  v-model="model.DOE"
                  placeholder="Facility Name">
        </base-input>
      </div>
      <div class="col-md-6 px-md-1">
        <base-input label="Current County of work"
                  v-model="model.employer"
                  placeholder="Work Station">
        </base-input>
      </div>
    </div>
    
    <base-button id="save" slot="footer" type="primary" @click="openModal()" fill>Save</base-button>
  </card>

  <div class="modal fade" id="save" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            Saved The data Successfully
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</template>
<script>


  export default {
    props: {
      model: {
        type: Object,
        default: () => {
          return {};
        }
      },
      methods() {
        function openModal() {
          $('#save').modal('show')
        }
      }
    }
  }
</script>
<style>
</style>
