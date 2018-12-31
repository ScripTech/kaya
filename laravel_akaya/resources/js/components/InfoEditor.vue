<template>
  <div>
    <editor-menu-bar class="mb-2" :editor="editor">
      <div slot-scope="{ commands, isActive }">
        <div style="font-weight: 500; font-family:roboto" :class="['btn border', { 'is-active btn-dark': isActive.bold() }]" @click="commands.bold">
          Boldar <icon name="bold" />
        </div>
        <div style="font-weight: 500; font-family:roboto" :class="['btn border', { 'is-active btn-dark': isActive.italic() }]" @click="commands.italic">
          Italico
        </div>
      </div>
    </editor-menu-bar>
    <editor-content class="ProseMirror-custom bg-white border-0 card p-3" :editor="editor" />
  </div>
</template>

<script>
import Icon from '@/js/components/Icon'
import { Editor, EditorContent, EditorMenuBar } from 'tiptap'
import {
  Blockquote,
  CodeBlock,
  HardBreak,
  Heading,
  OrderedList,
  BulletList,
  ListItem,
  TodoItem,
  TodoList,
  Bold,
  Code,
  Italic,
  Link,
  Strike,
  Underline,
  History,
} from 'tiptap-extensions'

export default {
 props: ['value'],
  components: {
    EditorMenuBar,
    EditorContent,
    Icon,
  },
  data() {
    return {
      editor: new Editor({
        extensions: [
          new Blockquote(),
          new CodeBlock(),
          new HardBreak(),
          new Heading({ levels: [1, 2, 3] }),
          new BulletList(),
          new OrderedList(),
          new ListItem(),
          new TodoItem(),
          new TodoList(),
          new Bold(),
          new Code(),
          new Italic(),
          new Link(),
          new Strike(),
          new Underline(),
          new History(),
        ],
        content: `<p id="textarea-home text-muted">Digite...</p>`,
        onUpdate: ({ getHTML }) => {
          this.sobreCasa = getHTML(),
          this.$emit('input', this.sobreCasa)
          },
      }),
      sobreCasa: null,
    }
  },
  beforeDestroy() {
    this.editor.destroy()
  },

}
</script>
