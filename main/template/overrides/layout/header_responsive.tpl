<div class="header--responsive">
    <div class="header__wrapper">
        <div class="header__logo">
            {{ logo }}
        </div>
        <div class="header__option">
            <ul class="nav navbar-nav header__list">
                
                {% for item in menu %}
                    {% set show_item = true %}
                    {% if user_in_anon_survey and item.key != 'homepage' %}
                        {% set show_item = false %}
                    {% endif %}

                    {% if show_item %}
                        <li class="{{ item.key }} {{ item.current }}">
                            {{ login_language_form }}
                        </li>
                        <li class="header__item--burger">
                            <div class="burger"></div>
                        </li>
                    {% endif %}
                {% endfor %}
            </ul>
        </div>
    </div>
    {% include 'layout/header_nav_responsive.tpl'|get_template %}
</div>