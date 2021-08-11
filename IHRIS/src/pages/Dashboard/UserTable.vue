<template>
  <base-table :data="table.facility"
              :columns="table.facilityColumns"
              thead-classes="text-primary">
  </base-table>
</template>
<script>
  import { BaseTable } from "@/components";
  export default {
    components: {
      BaseTable
    },
    computed: {
      table(){
        return this.$t('dashboard.usersTable');
      }
    }
  }
</script>
<style>
</style>
