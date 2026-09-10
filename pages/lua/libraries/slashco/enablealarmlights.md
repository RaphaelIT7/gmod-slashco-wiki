<function name="EnableAlarmLights" parent="SlashCo" type="libraryfunc">
	<description>
		Triggers a map-wide blackout: turns on all registered alarm cagelights (and their linked light entities), and turns off any lights configured via `GameData.NonAlarmLightsName`.<br>
		Unless `noEffect` is `true`, also fades every player's screen to black and plays a blackout sound. Sets `GameData.IsBlackout` to `true`.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="noEffect" type="boolean" optional>If `true`, skips the screen fade and blackout sound.</arg>
	</args>
</function>
