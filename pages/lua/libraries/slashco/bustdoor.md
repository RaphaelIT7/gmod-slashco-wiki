<function name="BustDoor" parent="SlashCo" type="libraryfunc">
	<description>
		Opens and then breaks every door entity sharing `target`'s name within 100 units, replacing them with physical `sc_broken_door` props that get pushed away by `force`.<br>
		The callback is invoked with `false` if `target` is invalid, if no matching door was found, or if `slasher` became invalid while the doors were breaking.
	</description>
	<realm>Server</realm>
	<group>Slasher</group>
	<args>
		<arg name="slasher" type="Player">The slasher busting the door, used as the origin for the applied force</arg>
		<arg name="target" type="Entity">A door entity; every door sharing its name is busted</arg>
		<arg name="force" type="number|Vector">The force applied to the broken door props. A number is applied along the slasher's forward direction</arg>
		<arg name="callback" type="function" optional>Called once with `(success, props)` once the doors have been busted, or with `(false)` on failure</arg>
		<arg name="noRecursive" type="any" optional>Unused</arg>
	</args>
</function>
