<function name="Dampen" parent="SlashCo" type="libraryfunc">
	<description>
		Framerate-independent smoothing helper.<br>
		Interpolates from `from` towards `to`, moving faster the higher `speed` is. Meant to be called every frame/think with the previous result passed back in as `from`.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="speed" type="number">How fast the value should approach `to`, higher values converge faster</arg>
		<arg name="from" type="number|Vector|Angle">The current value</arg>
		<arg name="to" type="number|Vector|Angle">The target value</arg>
	</args>
	<rets>
		<ret name="result" type="number|Vector|Angle">The value moved a step closer to `to`</ret>
	</rets>
</function>