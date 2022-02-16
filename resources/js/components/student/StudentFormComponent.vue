<template>
  <div>
    <el-card class="box-card">
      <div slot="header" class="clearfix">
        <el-page-header @back="goBack" :content="`Category - ${scope}`">
        </el-page-header>
        <div>form</div>
      </div>

      <div>
        <el-form :model="model" :rules="rules" ref="studentform">
          <el-row gutter="10">
            <el-form-item label="name" required prop="name">
              <el-input
                v-model="model.name"
                aria-placeholder="Student Name"
              ></el-input>
            </el-form-item>
          </el-row>
        </el-form>
        <el-form :model="model" :rules="rules" ref="studentform">
          <el-row gutter="10">
            <el-form-item label="class" required prop="class">
              <el-input
                v-model="model.class"
                aria-placeholder="Student Name"
              ></el-input>
            </el-form-item>
            <el-form :model="model" :rules="rules" ref="studentform">
              <el-row gutter="10">
                <el-form-item label="section" required prop="section">
                  <el-input
                    v-model="model.section"
                    aria-placeholder="Student Name"
                  ></el-input>
                </el-form-item>
                <el-form :model="model" :rules="rules" ref="studentform">
                  <el-row gutter="10">
                    <el-form-item label="email" required prop="email">
                      <el-input
                        v-model="model.email"
                        aria-placeholder="Student Name"
                      ></el-input>
                    </el-form-item>
                      </el-row>
                    </el-form>
                  </el-row>
                  <el-row :gutter="10">
                      <el-form-item>
                          <el-button type="success" @click="saveForm('studentFrom')"> Save Student</el-button>
                    </el-form-item>
                  </el-row>
                </el-form>
              </el-row>
            </el-form>
          </el-row>
        </el-form>
      </div>
    </el-card>
  </div>
</template>

<script>
export default {
  name: "student-form-component",
  mounted() {
    console.log("component mounted");
  },
  data() {
    return {
      model: {
        name: null,
        class: null,
        section: null,
        email: null,
      },
      rules: {},
    };
  },
  methods: {
    goBack() {
      window.location.href = "/students";
    },
    saveForm(fromName) {},
  },
};
</script>