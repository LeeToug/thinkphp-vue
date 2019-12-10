<template>
  <div id="manage">
    <el-container>
      <el-header>
        <app-header></app-header>
      </el-header>
      <el-container>
        <el-aside width="200px">
          <app-left></app-left>
        </el-aside>
        <el-container>
          <el-main>
            <router-view></router-view>
          </el-main>
          <el-footer>
            <app-footer></app-footer>
          </el-footer>
        </el-container>
      </el-container>
    </el-container>
  </div>
</template>
<script>
    import Header from './layout/header'
    import Footer from './layout/footer'
    import Left from './layout/left'
    export default {
        name: 'Manage',
        components: {
            'app-header':Header,
            'app-footer':Footer,
            'app-left':Left,
        }
    }
</script>
<style>
  .el-header, .el-footer {
    background-color: #B3C0D1;
    color: #333;
    text-align: center;
    line-height: 60px;
  }

  .el-aside {
    background-color: #D3DCE6;
    color: #333;
    text-align: center;
    line-height: 200px;
  }

  .el-main {
    background-color: #E9EEF3;
    color: #333;
    text-align: center;
    line-height: 160px;
  }

  body > .el-container {
    margin-bottom: 40px;
  }

  .el-container:nth-child(5) .el-aside,
  .el-container:nth-child(6) .el-aside {
    line-height: 260px;
  }

  .el-container:nth-child(7) .el-aside {
    line-height: 320px;
  }
</style>
