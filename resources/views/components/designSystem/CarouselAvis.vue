<template>
    <div class="carousel-container relative w-full p-4">
        <div
            class="carousel-inner flex transition-transform ease-out"
            :style="{
                transform: `translateX(-${
                    (currentIndex * 100) / itemsPerPage
                }%)`,
            }" 
        >
            <div
                v-for="(avis, index) in avisList"
                :key="index"
                class="avis-card bg-[#F8F9FB] rounded-lg shadow-card-box-shadow p-6 sm:w-full lg:w-1/3 mx-4"
            >
                <!-- Avatar et Informations -->
                <div class="flex items-center mb-4">
                    <img
                        :src="avis.avatar"
                        alt="Avatar"
                        class="w-12 h-12 rounded-full mr-4"
                    />
                    <div>
                        <p class="font-semibold text-lg">{{ avis.nom }}</p>
                        <p class="text-sm text-gray-500">{{ avis.date }}</p>
                    </div>
                </div>

                <!-- Etoiles -->
                <div class="flex text-yellow-500 mb-2">
                    <i v-for="i in 5" :key="i" class="fa fa-star"></i>
                </div>

                <!-- Avis avec "Lire plus" -->
                <p class="text-gray-700 text-sm mb-4">
                    {{
                        avis.isExpanded
                            ? avis.avis
                            : avis.avis.substring(0, 100) + "..."
                    }}
                    <span
                        v-if="avis.readMore"
                        class="text-blue-500 cursor-pointer"
                        @click="toggleReadMore(index)"
                    >
                        {{ avis.isExpanded ? "Lire moins" : "Lire plus" }}
                    </span>
                </p>
            </div>
        </div>

        <!-- Contrôles de carrousel -->
        <div
            class="absolute top-1/2 left-[-10px] transform -translate-y-1/2 z-10"
        >
            <button @click="prev" class="px-4 py-2  rounded-full">
                <i class="fa fa-chevron-left"></i>
            </button>
        </div>

        <div
            class="absolute top-1/2 right-[-10px] transform -translate-y-1/2 z-10"
        >
            <button @click="next" class="px-4 py-2  rounded-full">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            avisList: [
                {
                    avatar: "https://randomuser.me/api/portraits/men/1.jpg",
                    nom: "John Doe",
                    date: "10 Oct 2024",
                    avis: "C'est une excellente expérience. Le service est incroyable, la qualité des produits est top. Je reviendrai sans hésiter!",
                    readMore: true,
                    isExpanded: false,
                },
                {
                    avatar: "https://randomuser.me/api/portraits/women/1.jpg",
                    nom: "Jane Smith",
                    date: "15 Sept 2024",
                    avis: "Très bien ! Je recommande vivement ce service. Les délais sont respectés, et le personnel est professionnel.",
                    readMore: true,
                    isExpanded: false,
                },
                {
                    avatar: "https://randomuser.me/api/portraits/men/2.jpg",
                    nom: "James Bond",
                    date: "25 Août 2024",
                    avis: "Un service impeccable, mais j'aurais aimé plus d'options dans le menu. Cependant, je suis satisfait globalement.",
                    readMore: true,
                    isExpanded: false,
                },
                {
                    avatar: "https://randomuser.me/api/portraits/women/2.jpg",
                    nom: "Anna Lee",
                    date: "05 Nov 2024",
                    avis: "Une expérience très agréable. Les services sont de qualité et je suis entièrement satisfaite.",
                    readMore: true,
                    isExpanded: false,
                },
                {
                    avatar: "https://randomuser.me/api/portraits/men/3.jpg",
                    nom: "Mike Tyson",
                    date: "20 Sept 2024",
                    avis: "Un peu cher mais la qualité en vaut la peine. J'y retournerai volontiers.",
                    readMore: true,
                    isExpanded: false,
                },
                {
                    avatar: "https://randomuser.me/api/portraits/men/3.jpg",
                    nom: "Mike Tyson",
                    date: "20 Sept 2024",
                    avis: "Un peu cher mais la qualité en vaut la peine. J'y retournerai volontiers.",
                    readMore: true,
                    isExpanded: false,
                },{
                avatar: "https://randomuser.me/api/portraits/men/3.jpg",
                    nom: "Mike Tyson",
                    date: "20 Sept 2024",
                    avis: "Un peu cher mais la qualité en vaut la peine. J'y retournerai volontiers.",
                    readMore: true,
                    isExpanded: false,
                },
            ],
            currentIndex: 0,
            itemsPerPage: 3,
        };
    },
    methods: {
        prev() {
            if (this.currentIndex > 0) {
                this.currentIndex--;
            } else {
                this.currentIndex =
                    Math.ceil(this.avisList.length / this.itemsPerPage) - 1;
            }
        },
        next() {
            if (
                this.currentIndex <
                Math.ceil(this.avisList.length / this.itemsPerPage) - 1
            ) {
                this.currentIndex++;
            } else {
                this.currentIndex = 0;
            }
        },
        toggleReadMore(index) {
            this.avisList[index].isExpanded = !this.avisList[index].isExpanded;
        },
    },
};
</script>

<style scoped>
.carousel-container {
    position: relative;
    /* max-width: 900px; */
    margin: 0 auto;
    overflow: hidden;
}

.carousel-inner {
    display: flex;
    transition: transform 0.5s ease;
}

.avis-card {
    flex-shrink: 0;
    margin-right: 20px;
    transition: transform 0.3s ease;
}

.avis-card:hover {
    transform: scale(1.05);
}


button i {
    font-size: 18px;
}
</style>
