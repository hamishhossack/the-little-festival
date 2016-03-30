---
title: 'Sign up for early bird tickets and latest details on <strong>The Little Festival</strong>'
form:
  name: newsletter
  fields:
    - name: name
      label: Name
      framework_size: half
      placeholder: Name
      autofocus: true
      autocomplete: true
      type: text
      validate:
        required: true
    - name: email
      framework_size: half
      label: Email
      placeholder: name@example.com
      type: text
      validate:
        rule: email
        required: true
  buttons:
    - type: submit
      value: Submit
  process:
    - email:
        from: '{{ config.plugins.email.from }}'
        to:
          - '{{ config.plugins.email.from }}'
          - '{{ form.value.email }}'
        subject: '[Feedback] {{ form.value.name|e }}'
        body: "{% include 'forms/data.html.twig' %}"
    - save:
        fileprefix: feedback-
        dateformat: Ymd-His-u
        extension: txt
        body: "{% include 'forms/data.txt.twig' %}"
    - message: 'Thank you for your feedback!'
    - display: thankyou
menu: after_article
---

