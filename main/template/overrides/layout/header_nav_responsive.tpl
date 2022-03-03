<div class="header-nav">
    <div class="header-nav__head">
        <div class="header-nav__wrapper-close">
            <div class="header-nav__button-close"></div>
        </div>
    </div>
    <div class="header-nav__body">
        <ul class="nav navbar-nav">
            {% for item in menu %}
                {% set show_item = true %}
                {% if user_in_anon_survey and item.key != 'homepage' %}
                    {% set show_item = false %}
                {% endif %}

                {% if show_item %}
                    <li class="{{ item.key }} {{ item.current }}">
                        <a class="navbar__link--fragote" href="{{ item.url }}" {{ item.target ? 'target="' ~ item.target ~ '"' : '' }} title="{{ item.title }}">
                            {{ item.title }}
                        </a>
                    </li>
                {% endif %}
            {% endfor %}
        </ul>
    </div>
</div>