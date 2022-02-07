vue.<template>
  <div>
    <div class="profile-page">
      <div class="wrapper">
        <div class="page-header page-header-small" filter-color="green">
          <div
            class="page-header-image"
            data-parallax="true"
            style="background-image: url('images/cc-bg-1.jpg')"
          ></div>
          <div class="container">
            <div class="content-center">
              <div class="cc-profile-image">
                <a href="#"><img src="images/bnbn.jpg" alt="Image" /></a>
              </div>
              <div class="h2 title">
                {{ personal.fname + " " + personal.lname }}
              </div>

              <p class="category text-white">{{ personal.title }}</p>
              <a
                class="btn btn-primary smooth-scroll mr-2"
                href="#contact"
                data-aos="zoom-in"
                data-aos-anchor="data-aos-anchor"
                >Hire Me</a
              ><a
                class="btn btn-primary"
                @click="onClick()"
                href="#"
                data-aos="zoom-in"
                data-aos-anchor="data-aos-anchor"
                >Download CV</a
              >
            </div>
          </div>
          <div class="section">
            <div class="container">
              <div class="button-container" v-for="social in socials">
                <a
                  class="btn btn-default btn-round btn-lg btn-icon"
                  :href="social.url"
                  :title="'Follow me on ' + social.name"
                  rel="tooltip"
                  target="blank"
                >
                  <i :class="'fa fa-' + social.name"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section" id="about">
      <div class="container">
        <div class="card" data-aos="fade-up" data-aos-offset="10">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card-body">
                <div class="h4 mt-0 title">About</div>
                <p>
                  Hello! I am {{ personal.fname + " " + personal.lname }}.
                  {{ personal.title }}.
                </p>
                <p>{{ personal.aboutme }}.</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card-body">
                <div class="h4 mt-0 title">Basic Information</div>
                <div class="row mt-3">
                  <div class="col-sm-4">
                    <strong class="text-uppercase">Email:</strong>
                  </div>
                  <div class="col-sm-8">{{ personal.email }}</div>
                </div>
                <div class="row mt-3">
                  <div class="col-sm-4">
                    <strong class="text-uppercase">Phone:</strong>
                  </div>
                  <div class="col-sm-8">{{ personal.mobile }}</div>
                </div>
                <div class="row mt-3">
                  <div class="col-sm-4">
                    <strong class="text-uppercase">Address:</strong>
                  </div>
                  <div class="col-sm-8">{{ personal.address }}</div>
                </div>
                <div class="row mt-3">
                  <div class="col-sm-4">
                    <strong class="text-uppercase">Language:</strong>
                  </div>
                  <div class="col-sm-2" v-for="lang in langs">
                    {{ lang.lang_name }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section" id="skill">
      <div class="container">
        <div class="h4 text-center mb-4 title">Professional Skills</div>
        <div
          class="card"
          data-aos="fade-up"
          data-aos-anchor-placement="top-bottom"
        >
          <div class="card-body">
            <div class="row">
              <div class="col-md-3" v-for="skill in skills">
                <div class="progress-container progress-primary">
                  <span class="progress-badge">{{ skill.skill_name }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="h4 text-center mb-4 title">Portfolio</div>
          </div>
        </div>
        <div class="tab-content gallery mt-5">
          <div class="tab-pane active" id="web-development">
            <div class="ml-auto mr-auto">
              <div class="row">
                <div class="col-md-6" v-for="project in projects">
                  <div
                    class="cc-porfolio-image img-raised"
                    data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom"
                  >
                    <a :href="project.project_url" target="_blank">
                      <img :src="'images/' + project.project_image" />
                      <figure class="cc-effect">
                        <figcaption>
                          <div class="h4">{{ project.project_name }}</div>
                          <p>{{ project.project_url }}</p>
                        </figcaption>
                      </figure></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section" id="experience">
      <div class="container cc-experience">
        <div class="h4 text-center mb-4 title">Work Experience</div>
        <div class="card" v-for="experience in experiences">
          <div class="row">
            <div
              class="col-md-3 bg-primary"
              data-aos="fade-right"
              data-aos-offset="50"
              data-aos-duration="500"
            >
              <div class="card-body cc-experience-header">
                <p>{{ experience.period }}</p>
              </div>
            </div>
            <div
              class="col-md-9"
              data-aos="fade-left"
              data-aos-offset="50"
              data-aos-duration="500"
            >
              <div class="card-body">
                <div v-for="job in experience.jobs">
                  <div class="h5">{{ job.job_header }}</div>
                  <p>
                    {{ job.description }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container cc-education">
        <div class="h4 text-center mb-4 title">Education & Courses</div>

        <div class="card" v-for="education in educations">
          <div class="row">
            <div
              class="col-md-3 bg-primary"
              data-aos="fade-right"
              data-aos-offset="50"
              data-aos-duration="500"
            >
              <div class="card-body cc-education-header">
                <div class="h5">{{ education.education_name }}</div>
              </div>
            </div>
            <div
              class="col-md-9"
              data-aos="fade-left"
              data-aos-offset="50"
              data-aos-duration="500"
            >
              <div class="card-body">
                <div v-for="edu in education.edudetails">
                  <div class="h5">{{ edu.edu_name }}</div>
                  <p class="category">{{ edu.detail }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section" id="contact">
      <div
        class="cc-contact-information"
        style="background-image: url('images/map.png')"
      >
        <div class="container">
          <div class="cc-contact">
            <div class="row">
              <div class="col-md-9">
                <div class="card mb-0" data-aos="zoom-in">
                  <div class="h4 text-center title">Contact Me</div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card-body">
                        <form @submit.prevent="register">
                          <div class="p pb-3">
                            <strong>Feel free to contact me </strong>
                          </div>
                          <div class="row mb-3">
                            <div class="col">
                              <div class="input-group">
                                <span class="input-group-addon"
                                  ><i class="fa fa-user-circle"></i
                                ></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  v-model="contact.recuriname"
                                  placeholder="Name"
                                  required="required"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col">
                              <div class="input-group">
                                <span class="input-group-addon"
                                  ><i class="fa fa-file-text"></i
                                ></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  v-model="contact.subject"
                                  placeholder="Subject"
                                  required="required"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col">
                              <div class="input-group">
                                <span class="input-group-addon"
                                  ><i class="fa fa-envelope"></i
                                ></span>
                                <input
                                  class="form-control"
                                  type="email"
                                  v-model="contact.email"
                                  placeholder="E-mail"
                                  required="required"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col">
                              <div class="form-group">
                                <textarea
                                  class="form-control"
                                  v-model="contact.msg"
                                  placeholder="Your Message"
                                  required="required"
                                ></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <button class="btn btn-primary" type="submit">
                                Send
                              </button>
                              <br />
                              <div id="success" class="alertmsg"></div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card-body">
                        <p class="mb-0"><strong>Address </strong></p>
                        <p class="pb-2">{{ personal.address }}</p>
                        <p class="mb-0"><strong>Mobile</strong></p>
                        <p class="pb-2">{{ personal.mobile }}</p>
                        <p class="mb-0"><strong>Email</strong></p>
                        <p>{{ personal.email }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="h4 title text-center">
        {{ personal.fname + " " + personal.lname }}
      </div>
      <div class="text-center text-muted">
        <p>&copy; {{ personal.fname }} CV. All rights reserved.<br /></p>
      </div>
    </footer>
  </div>
</template>

<script>
export default {
  name: "home",
  data() {
    return {
      personal: [],
      skills: [],
      langs: [],
      projects: [],
      experiences: [],
      educations: [],
      socials: [],

      contact: {},
    };
  },
  created() {
    axios.get("http://localhost:8000/api/cv").then((response) => {
      this.personal = response.data.personal;
      this.skills = response.data.skills;
      this.langs = response.data.langs;
      this.projects = response.data.projects;
      this.experiences = response.data.experiences;
      this.educations = response.data.educations;
      this.socials = response.data.socials;
    });
  },
  methods: {
    register() {
      axios
        .post("http://localhost:8000/api/cv/register", this.contact)
        .then((response) => {
          $("#success").html(response.data.message);
        });
    },
    onClick() {
      axios({
        url: "http://localhost:8000/api/cv/downloadcv",
        method: "GET",
        responseType: "blob",
      }).then((response) => {
        const url = window.URL.createObjectURL(
          new Blob([response.data], { type: "application/pdf" })
        );
        const link = document.createElement("a");
        link.href = url;
        link.setAttribute("download", "cv");
        document.body.appendChild(link);
        link.click();
      });
    },
  },
};
</script>
<style>
</style>
