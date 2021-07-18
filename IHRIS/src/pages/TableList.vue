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

      

    </div>
</template>
<script>
import { BaseTable } from "@/components";
const tableColumns = [
        "Name",
        "Gender",
        "County",
        "Facility",
        "Cadre"
      ];
const tableData = [
  {
    id: 1,
    name: "Dakota Rice",
    county: "Kakamega",
    facility: "Kach-A",
    cadre: "Health Officer",
    gender: "Male"
  },
  {
    id: 2,
    name: "Kelvin Mucheru",
    county: "Mombasa",
    facility: "Ngumba",
    cadre: "Chief Officer",
    gender: "Female"
  },
  {
    id: 3,
    name: "John Kamau",
    county: "Nairobi",
    facility: "Nyr-C",
    cadre: "Chief Officer",
    gender: "Male"
  },
  {
    id: 4,
    name: "William Waweru",
    county: "Kitale",
    facility: "Ulanda",
    cadre: "HR Ofiicer",
    gender: "Male"
  },
  {
    id: 5,
    name: "Doris Atieno",
    county: "Kilifi",
    facility: "Kach-B",
    cadre: "HR Officer",
    gender: "Female"
  },
  {
    id: 6,
    name: "Sharon Masingu",
    county: "Nyeri",
    facility: "Doct",
    cadre: "Health Officer",
    gender: "Female"
  },
  {
    id: 7,
    name: "Jon Porter",
    county: "Kakamega",
    facility: "Kach-A",
    cadre: "Health Officer",
    gender: "Male"
  }
];

export default {
  components: {
    BaseTable
  },
  data() {
    return {
      table1: {
        title: "Employee Table",
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
