<div x-data="{show:false}">
    <div @click="show=!show">
        {{$trigger}}
    </div>
  <template x-if="show">
    <div class="absolute top-0 right-0 left-0 bottom-0 bg-gray-300 opacity-75" @click="show=!show"
      @keyup.escape.window="show=false">
      {{$slot}}
    </div>
  </template>
</div>
