<template>
    <div>
        <form @submit="formSubmit">
            <!-- Cambia la condición de `show` para mostrar o deshabilitar el botón -->
            <button v-if="show" type="submit" class="w-100 btn btn-success">
                Postular
            </button>
            <div v-else-if="vacancies === 0" class="alert alert-warning">
                postulacion con exito
            </div>
            <div v-else class="alert alert-success">
                Solicitud enviada con éxito.
            </div>
        </form>
    </div>
</template>

<script>
import axios from "axios";

export default {
    props: ["jobid"],
    data() {
        return {
            show: true,
            vacancies: 0, // Nueva propiedad para almacenar el número de vacantes disponibles
        };
    },
    mounted() {
        this.fetchVacancies(); // Llama al método para obtener el número de vacantes
    },
    methods: {
        // Método para obtener el número de vacantes disponibles
        fetchVacancies() {
            axios.get(`/jobfinder/jobs/${this.jobid}/vacancies`)
                .then(response => {
                    this.vacancies = response.data.vacancies;
                    // Si no hay vacantes, deshabilitar el botón
                    if (this.vacancies === 0) {
                        this.show = false;
                    }
                })
                .catch(error => {
                    console.error("Error fetching vacancies:", error);
                });
        },
        
        formSubmit(e) {
            e.preventDefault();
            axios.post("/jobfinder/applications/" + this.jobid, {})
                .then((response) => {
                    this.show = false;
                });
        },
    },
};
</script>
