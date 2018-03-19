<template>
    <div>

    </div>
</template>

<script>
    import HandlesAjaxActionsInPopup from "../mixins/HandlesAjaxActionsInPopup";
    import FetchesProject from "../mixins/FetchesProject";
    import FetchesStudy from "../mixins/FetchesStudy";

    export default {
        mixins: [
            HandlesAjaxActionsInPopup,
            FetchesProject,
            FetchesStudy
        ],
        props: [],
        data: function () {
            return {
                
            }
        },
        methods: {
            
            save: function () {
                this.ajaxSave() //TODO
            },
            
            resetForm: function (force = false) {
                //TODO
            },
            
            fetchUpdatedData: function () {
                //TODO
            }
            
        }
    }
</script>
