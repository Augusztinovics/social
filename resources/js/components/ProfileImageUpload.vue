<template>
    <div>
        <div class="w-full" :style="photoStyle"></div>

        <form @submit="submit" enctype="multipart/form-data">
            <div class="row">

                <div class="col-md-4">
                    <label for="image" class="profile-upload-select">{{ lngSelectImg }}</label>
                    <input type="file" name="image" id="image" accept="image/png, image/jpeg" style="display: none;" @change="fileChange($event.target.files[0])" />
                </div>

                <div class="p-4 p-md-0 col-md-4">
                    <img :src="imageData" :alt="lngNoImg" id="image_preview" class="img-fluid">
                </div>

                <div class="col-md-4">
                    <button type="submit" class="ms-2 btn btn-primary" :disabled="submitDisabled">{{ lngUpload }}</button>
                </div>

            </div>
        </form>
    </div>
</template>

<script>
    export default {
        props: {
            user: {
                type: Object,
                required: true
            },
            userProfile: {
                type: Object,
                required: true
            },
            lngUpload: {
                type: String,
                default: 'Upload'
            },
            lngNoImg: {
                type: String,
                default: 'No Image Selected'
            },
            lngSelectImg: {
                type: String,
                default: 'Select Image'
            }
        },
        data() {
            return {
                selectedImage: null,
                imageData: null,
                imageName: null,
            };
        },
        computed: {
            photoUrl() {
                if (this.imageName) {
                    return 'uploads/' + this.user.id + '/profile/' + this.imageName;
                }
                return false;
            },
            photoStyle() {
                if (this.photoUrl) {
                    return {
                        height: 400 + 'px',
                        background: "#ffffff url('" + this.photoUrl + "') no-repeat center",
                    };
                } else {
                    return {
                        height: 400 + 'px',
                        backgroundColor: '#6c757d',
                    };
                }
            },
            submitDisabled() {
                return this.selectedImage ? false : true;
            },
        },
        methods: {
            submit(e) {
                e.preventDefault();
                console.log(e);
                console.log(e.currentTarget.data);
                alert('Submiting');
            },
            fileChange(file) {
                console.log(file);
                if (file) {
                    this.selectedImage = file;
                    const reader = new FileReader
                    reader.onload = e => {
                        this.imageData = e.target.result
                    }
                    reader.readAsDataURL(file);
                } else {
                    this.selectedImage = null;
                    this.imageData = null;
                }
            }
        },
        mounted() {
            if (this.userProfile.profile_photo) {
                this.imageName = this.userProfile.profile_photo;
            }
            console.log('Image Upload Component mounted.')
        }
    }
</script>
