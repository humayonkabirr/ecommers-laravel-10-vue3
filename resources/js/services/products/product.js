import axios from "axios";
import { computed, reactive, ref } from "vue";
// import { useRouter } from "vue-router";

// import trumpetSfx from "@/assets/sounds/product_add.mp3";
import trumpetSfx from "@/assets/sounds/1secondton_87a501f05076308.mp3";

export default function ServiceCall() {
  // Access the router instance
//   const router = useRouter();

  const errors = ref({});
  const status = ref("Create Page");
  const resData = ref([]);

  const storeDate = async (url, data) => {
    try {
      // await axios.get("/sanctum/csrf-cookie");
      let response = await axios.post("/v1/"+url, data,
        {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        }
      );

      status.value = "Create Page";

      if (response.data.status === 422) {
        // console.log(response.data.errors);
        errors.value = response.data.errors;
        var audio = new Audio(trumpetSfx);
        audio.play();

        Swal.fire({
          icon: "error",
          title: "Oops!! Validation Error Boss",
          text: "Please Fill in The Required Fields!",
        });
      } else if (response.data.status === 500) {
        // console.log(response.data);
        var audio = new Audio(trumpetSfx);
        audio.play();
        // await router.push("/error");
      } else {
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Success",
          text: response.data.message,
          showConfirmButton: false,
          timer: 2500,
        });


        await router.back();
      }
    } catch (e) {
      console.log(e);
    //   await router.push("/error");
    }
  };

  const getData = async (url) => {
    resData.value = [];
    try {
      let response = await axios.get("/v1/"+url);
      resData.value = response;
      console.log(response);
    } catch (e) {
      console.log(e);
    //   await router.push("/error");
    }
  };

  return { storeDate, getData, resData, status, errors };
}




// loadMore() {
//   this.busy = true;
//   axios.get(`/api/products?page=${this.page}`)
//       .then(res => {
//           if (res.data.data.length > 0) {
//               this.products = [...this.products, ...res.data.data];
//               this.page += 1;
//           } else {
//               this.busy = true;
//           }
//       })
//       .catch(err => {
//           console.error("Error fetching products:", err);
//           this.error = "Failed to load products. Please try again.";
//       })
//       .finally(() => {
//           this.busy = false; // Release the busy lock, whether success or failure
//       });
// }
