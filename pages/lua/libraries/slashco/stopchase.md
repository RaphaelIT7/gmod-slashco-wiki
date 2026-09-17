<function name="StopChase" parent="SlashCo" type="libraryfunc">
	<description>
		Ends the given slasher's chase mode: resets their speed to <page>SLASHER#ProwlSpeed</page>, stops the chase music, starts their chase cooldown, and clears `SurvivorChased` on any survivor that was being chased by them.<br>
		If no other slasher is currently chasing, the `SlasherChase` fog is also removed.
	</description>
	<realm>Server</realm>
	<group>Slasher</group>
	<args>
		<arg name="slasher" type="Player">The slasher to stop chasing</arg>
	</args>
</function>
