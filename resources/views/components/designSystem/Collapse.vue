<template>
    <div class="collapse-container">
      <div @click="toggle" class="collapse-header cursor-pointer  rounded-md flex justify-between items-center border-b-2 border-b-gray-300">
        <span class="pb-4 text-text-14 lg:text-text-30">{{ title }}</span>
        <span  class="ml-2 transition-transform transform text-xl">
          <i class="fa" :class="isOpen ? 'fa-minus' : 'fa-plus'"></i> 
        </span>
      </div>
      
      <transition name="collapse-transition">
        <div v-show="isOpen" class="collapse-content p-4 bg-gray-100 rounded-md mt-2">
          <slot></slot>
        </div>
      </transition>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      title: {
        type: String,
        default: "Titre du Collapse",
      },
      isOpenDefault: {
        type: Boolean,
        default: false,
      },
    },
    data() {
      return {
        isOpen: this.isOpenDefault,
      };
    },
    methods: {
      toggle() {
        this.isOpen = !this.isOpen;
      },
    },
  };
  </script>
  
  <style scoped>
  .collapse-container {
    margin-bottom: 10px;
  }
  
  .collapse-header {
    cursor: pointer;
  }
  
  .collapse-content {
    transition: max-height 0.1s ease-in-out;
    overflow: hidden;
  }
  
  .collapse-transition-enter-active, .collapse-transition-leave-active {
    transition: max-height 0.1s ease-in-out;
  }
  
  .collapse-transition-enter, .collapse-transition-leave-to {
    max-height: 0;
  }
  </style>
  