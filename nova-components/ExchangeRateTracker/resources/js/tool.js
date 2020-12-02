Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'exchange-rate-tracker',
      path: '/exchange-rate-tracker',
      component: require('./components/Tool'),
    },
  ])
})
