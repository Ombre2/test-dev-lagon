<template>
    <div
        class="bg-white card-box-shadow rounded-lg p-6 flex flex-col items-center justify-center relative"
    >
        <!-- Icône Previous positionnée à gauche avec curseur pointer -->
        <i
            @click="prevItem"
            class="fa fa-chevron-left text-xl absolute left-4 top-1/2 transform -translate-y-1/2 cursor-pointer"
        ></i>
        <!-- Icône Chevron Left -->

        <!-- Conteneur de la carte ou élément à naviguer -->
        <div class="flex flex-col items-center justify-center mb-6">
            <!-- Icône -->
            <i class="fa fa-circle text-[34px] text-blue-500 mb-4"></i>
            <!-- Icône circulaire -->

            <!-- Taux de réussite -->
            <p class="text-text-35 font-semibold">{{ currentCard.percentage }}</p>
            <p class="text-text-20 text-center">{{ currentCard.title }}</p>
            <p class="text-text-20 text-center">{{ currentCard.subtitle }}</p>
        </div>

        <!-- Icône Next positionnée à droite avec curseur pointer -->
        <i
            @click="nextItem"
            class="fa fa-chevron-right text-xl absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer"
        ></i>
        <!-- Icône Chevron Right -->
    </div>
</template>

<script>
export default {
    name: "Statistic",
    data() {
        return {
            // Les données des cartes
            cards: [
                {
                    percentage: "97,7%",
                    title: "Taux de réussite",
                    subtitle: "à nos tests psychotechniques",
                },
                {
                    percentage: "85%",
                    title: "Taux de réussite",
                    subtitle: "à nos tests psychotechniques",
                },
                {
                    percentage: "92%",
                    title: "Taux de réussite",
                    subtitle: "à nos tests psychotechniques",
                },
            ],
            currentIndex: 0, // Index de la carte actuelle
        };
    },
    computed: {
        // Récupérer la carte actuelle en fonction de l'index
        currentCard() {
            return this.cards[this.currentIndex];
        },
    },
    methods: {
        // Fonction pour passer à l'élément précédent
        prevItem() {
            if (this.currentIndex > 0) {
                this.currentIndex--;
            } else {
                this.currentIndex = this.cards.length - 1; // Boucle vers le dernier élément
            }
        },

        // Fonction pour passer à l'élément suivant
        nextItem() {
            if (this.currentIndex < this.cards.length - 1) {
                this.currentIndex++;
            } else {
                this.currentIndex = 0; // Boucle vers le premier élément
            }
        },
    },
};
</script>

<style scoped>
/* Styles spécifiques au composant, vous pouvez les personnaliser */
</style>
