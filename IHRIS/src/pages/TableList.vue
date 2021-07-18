<template>
    <div class="row">
      <div class="col-12">
        <card :title="table1.title">
          <div class="table-responsive">
            <base-table :data="table1.data"
                        :columns="table1.columns"
                        thead-classes="text-primary">
            </base-table>
          </div>
        </card>
      </div>

      <div class="col-12">
        <card class="card-plain">
          <div class="table-full-width table-responsive">
            <base-table :title="table2.title" :sub-title="table2.subTitle" :data="table2.data"
                         :columns="table2.columns">

            </base-table>
          </div>
        </card>
      </div>

    </div>
</template>
<script>
import { BaseTable } from "@/components";
const tableColumns = ["Name", "County", "Work Station", "Salary"];
const tableData = [
  {
    id: 1,
    name: "John Rice",
    salary: "Khs36.738",
    county: "Mig",
    Work_station: "Homabay",
  },
  {
    id: 2,
    name: "Llian Amolo",
    salary: "KSh23,789",
    county: "Kisumu",
    Work_station: "Kakamega"
  },
  {
    id: 3,
    name: "Sara Wairimu",
    salary: "Khs56,142",
    county: "Nairobi",
    Work_station: "Nyeri"
  },
  {
    id: 4,
    name: "Philip Wafula",
    salary: "Khs38,735",
    county: "Bungoma",
    work_station: "Nandi"
  },
  {
    id: 5,
    name: "Doris Maira",
    salary: "Khs63,542",
    country: "Kisii",
    work_station: "Migori"
  },
  {
    id: 6,
    name: 'Mason Juma',
    salary: 'Khs 98,615',
    county: 'Vihiga',
    work_station: 'Busia'
  },
  {
    id: 7,
    name: 'Jon Juma',
    salary: 'Khs78,615',
    county: 'Busia',
    work_station: 'Malindi'
  }
];

export default {
  components: {
    BaseTable
  },
  data() {
    return {
      table1: {
        title: "Simple Table",
        columns: [...tableColumns],
        data: [...tableData]
      },
      table2: {
        title: "Table on Plain Background",
        columns: [...tableColumns],
        data: [...tableData]
      }
    };
  }
};
</script>
<style>
</style>
